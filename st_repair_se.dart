import 'package:flutter/material.dart';
import 'package:cloud_firestore/cloud_firestore.dart';

class Myst_repair_se extends StatefulWidget {
  const Myst_repair_se ({Key? key}) : super(key: key);

  @override
  State<Myst_repair_se > createState() => _Myst_repair_seState();
}

class _Myst_repair_seState extends State<Myst_repair_se > {
  String searchText = '';

  void filterGarages() {
    if (searchText.isEmpty) {
      setState(() {
        garageList.clear();
      });
      return;
    }

    FirebaseFirestore.instance
        .collection('garages')
        .where('repairsteering', isEqualTo: true) // Only fetch garages where carWash is true
        .get()
        .then((QuerySnapshot querySnapshot) {
      final filteredGarages = querySnapshot.docs.where((garageDoc) {
        final data = garageDoc.data() as Map<String, dynamic>;
        final location = (data['location'] ?? "").toLowerCase();
        final garageName = data['garageName'] ?? "";
        return location.contains(searchText.toLowerCase()) ||
            garageName.contains(searchText);
      }).toList();

      setState(() {
        garageList = filteredGarages;
      });
    });
  }

  List<DocumentSnapshot> garageList = [];

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Search Your Garage'),
        centerTitle: true,
      ),
      body: Stack(
        children: [
          // Background Image
          Container(
            decoration: BoxDecoration(
              image: DecorationImage(
                image: AssetImage('assets/sr1.jpg'), // Add your background image
                fit: BoxFit.cover,
              ),
            ),
          ),
          Center(
            child: Column(
              children: [
                SizedBox(height: 20),
                // "Search for Garage" text
                Text(
                  'Search for Steering Repair',
                  style: TextStyle(
                    fontSize: 24, // Adjust the font size as needed
                    fontWeight: FontWeight.bold,
                    color: Colors.orange,
                  ),
                ),
                SizedBox(height: 20),
                // Custom Search Bar
                Container(
                  width: 300,
                  padding: EdgeInsets.symmetric(horizontal: 20),
                  decoration: BoxDecoration(
                    color: Colors.white.withOpacity(0.8),
                    borderRadius: BorderRadius.circular(50),
                  ),
                  child: Row(
                    children: [
                      Icon(Icons.search),
                      SizedBox(width: 10),
                      Expanded(
                        child: TextField(
                          onChanged: (value) {
                            setState(() {
                              searchText = value;
                            });
                            filterGarages(); // Trigger the filter function
                          },
                          decoration: InputDecoration(
                            hintText: 'Search by Location or Garage Name',
                            border: InputBorder.none,
                          ),
                        ),
                      ),
                    ],
                  ),
                ),
                SizedBox(height: 20),

                // Display search results
                Expanded(
                  child: searchText.isEmpty
                      ? Center(
                    child: Text(
                      'Enter a search term',
                      style: TextStyle(
                        fontSize: 25,
                        fontWeight: FontWeight.bold,
                        color: Colors.red,
                      ),
                    ),
                  )
                      : ListView.builder(
                    itemCount: garageList.length,
                    itemBuilder: (context, index) {
                      final data = garageList[index].data() as Map<String, dynamic>;
                      final ownerName = data['firstName'] + ' ' + data['lastName'];
                      final garageName = data['garageName'] ?? ''; // Ensure garageName is not null
                      final location = data['location'];
                      final phoneNumber = data['phoneNumber'];
                      final email = data['emailAddress'];
                      return Container(
                        margin: EdgeInsets.symmetric(vertical: 10, horizontal: 20),
                        padding: EdgeInsets.all(10),
                        decoration: BoxDecoration(
                          color: Colors.purpleAccent.withOpacity(0.9), // Change the background color
                          borderRadius: BorderRadius.circular(8),
                        ),
                        child: Column(
                          crossAxisAlignment: CrossAxisAlignment.start,
                          children: [
                            Text(
                              'Owner Name: $ownerName',
                              style: TextStyle(fontSize: 18, fontWeight: FontWeight.bold, color: Colors.white), // Change the text color
                            ),
                            Text(
                              'Garage Name: $garageName',
                              style: TextStyle(fontSize: 16, fontWeight: FontWeight.bold, color: Colors.yellow), // Change the text color
                            ),
                            Text('Location: $location', style: TextStyle(color: Colors.white)), // Change the text color
                            Text('Phone Number: $phoneNumber', style: TextStyle(color: Colors.white)), // Change the text color
                            Text('Email: $email', style: TextStyle(color: Colors.white)), // Change the text color
                          ],
                        ),
                      );
                    },
                  ),
                ),
              ],
            ),
          ),
        ],
      ),
    );
  }
}
