import 'package:flutter/material.dart';

void main() {
  runApp(MaterialApp(
    home: MyHome(),
    routes: {
      'a_search': (context) => Placeholder(), // Replace with your actual pages
      'carwash_search': (context) => Placeholder(),
      'services': (context) => Placeholder(),
      'add': (context) => AddGaragePage(), // Replace with your "Add Your Garage" page
      'get_garage': (context) => Placeholder(),
      'deletegarage': (context) => Placeholder(),
      'about': (context) => Placeholder(),
      'confirm': (context) => Placeholder(),
    },
  ));
}

class MyHome extends StatefulWidget {
  const MyHome({Key? key}) : super(key: key);

  @override
  State<MyHome> createState() => _MyOpeningState();
}

class _MyOpeningState extends State<MyHome> {
  bool termsAccepted = false; // Track if terms are accepted

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        backgroundColor: Colors.purple,
        title: Text(
          'Admin Page',
          style: TextStyle(
            color: Colors.white,
            fontWeight: FontWeight.bold,
            fontSize: 30,
          ),
        ),
        centerTitle: true,
      ),
      backgroundColor: Colors.white,
      body: SingleChildScrollView(
        child: Column(
          children: [
            SizedBox(
              height: 30,
            ),
            Center(
              child: Text(
                'Garage Owner Page',
                style: TextStyle(fontSize: 30),
                textAlign: TextAlign.center,
              ),
            ),
            SizedBox(height: 20),
            Padding(
              padding: const EdgeInsets.all(10.0),
              child: Column(
                children: [
                  buildLocationButton(
                    text: 'SEARCH GARAGE',
                    onPressed: () {
                      Navigator.pushNamed(context, 'a_search');
                    },
                    buttonColor: Colors.green.shade100,
                  ),
                  SizedBox(height: 5),
                  buildLocationButton(
                    text: 'FOR WASH CAR',
                    onPressed: () {
                      Navigator.pushNamed(context, 'carwash_search');
                    },
                    buttonColor: Colors.orange.shade100,
                  ),
                  SizedBox(height: 5),
                  buildLocationButton(
                    text: 'OTHER SERVICES',
                    onPressed: () {
                      Navigator.pushNamed(context, 'services');
                    },
                    buttonColor: Colors.purple.shade100,
                  ),
                  SizedBox(height: 5),
                  // Add Garage Button
                  buildLocationButton(
                    text: 'ADD YOUR GARAGE',
                    onPressed: () {
                      if (termsAccepted) {
                        Navigator.pushNamed(context, 'add');
                      } else {
                        _showTermsDialog(context);
                      }
                    },
                    buttonColor: Colors.blue.shade100,
                  ),
                  SizedBox(height: 5),
                  buildLocationButton(
                    text: 'UPDATE GARAGE INFO',
                    onPressed: () {
                      Navigator.pushNamed(context, 'get_garage');
                    },
                    buttonColor: Colors.pink.shade50,
                  ),
                  SizedBox(height: 5),
                  buildLocationButton(
                    text: 'DELETE YOUR GARAGE',
                    onPressed: () {
                      Navigator.pushNamed(context, 'deletegarage');
                    },
                    buttonColor: Colors.yellow.shade100,
                  ),
                  SizedBox(height: 5),
                  buildLocationButton(
                    text: 'ABOUT DEVELOPERS',
                    onPressed: () {
                      Navigator.pushNamed(context, 'about');
                    },
                    buttonColor: Colors.blue.shade100,
                  ),
                  SizedBox(height: 5),
                  buildLocationButton(
                    text: 'LOGOUT',
                    onPressed: () {
                      _showLogoutDialog(context);
                    },
                    buttonColor: Colors.red.shade100,
                  ),
                ],
              ),
            ),
          ],
        ),
      ),
    );
  }

  Widget buildLocationButton({
    required String text,
    required VoidCallback onPressed,
    required Color buttonColor,
  }) {
    return Container(
      width: double.infinity,
      height: 60,
      margin: EdgeInsets.symmetric(vertical: 5),
      child: ElevatedButton(
        onPressed: onPressed,
        style: ElevatedButton.styleFrom(
          textStyle: TextStyle(fontSize: 20),
          padding: EdgeInsets.all(10),
          primary: buttonColor,
          onPrimary: Colors.black,
          minimumSize: Size(150, 40),
        ),
        child: Text(text),
      ),
    );
  }

  void _showTermsDialog(BuildContext context) {
    showDialog(
      context: context,
      builder: (BuildContext context) {
        return StatefulBuilder(
          builder: (context, setState) {
            return AlertDialog(
              title: Text(
                "Terms and Conditions",
                style: TextStyle(color: Colors.purple),
              ),
              content: SingleChildScrollView(
                child: Column(
                  crossAxisAlignment: CrossAxisAlignment.start,
                  children: [
                    Text(
                      "By adding your garage, you agree to the following terms and conditions:",
                      style: TextStyle(color: Colors.black,fontWeight: FontWeight.bold),
                    ),
                    Text(
                      "1. Registration Requirements:",
                      style: TextStyle(color: Colors.red,fontWeight: FontWeight.bold,fontSize: 18),
                    ),
                    Text(
                      "   - Garage owners must log in with their valid email and mobile number."),
                    Text(
                      "   - Each owner can register one garage with a unique mobile number."),
                    Text(
                      "   - Different garages cannot be registered with the same mobile number."),
                    Text(
                      "2. Accuracy of Information:",
                      style: TextStyle(color: Colors.red,fontWeight: FontWeight.bold,fontSize: 18),
                    ),
                    Text(
                      "   - Garage owners must provide accurate and valid information about their garage."),
                    Text(
                      "   - If fraudulent information is detected, the garage listing will be automatically removed."),
                    Text(
                      "3. Mobile Number Change:",
                      style: TextStyle(color: Colors.red,fontWeight: FontWeight.bold,fontSize: 18),
                    ),
                    Text(
                      "   - Once a garage is added, the mobile number associated with the garage cannot be changed."),
                    Text(
                      "   - However, you can update your information by deleting your garage and creating a new listing."),
                    Text(
                      "4. SMS Notifications:",
                      style: TextStyle(color: Colors.red,fontWeight: FontWeight.bold,fontSize: 18),
                    ),
                    Text(
                      "   - We will send SMS notifications to your registered mobile number to inform you of any updates or important information regarding your garage."),
                    Text(
                      "5. Deletion of Garage:",
                      style: TextStyle(color: Colors.red,fontWeight: FontWeight.bold,fontSize: 18),
                    ),
                    Text(
                      "   - You have the option to delete your garage listing if you do not agree with these terms and conditions."),
                    Text(
                      "6. Contact and Support:",
                      style: TextStyle(color: Colors.red,fontWeight: FontWeight.bold,fontSize: 18),
                    ),
                    Text(
                      "   - For any questions or support related to your garage listing, please contact our support team."),
                    Checkbox(
                      value: termsAccepted,
                      onChanged: (value) {
                        setState(() {
                          termsAccepted = value ?? false;
                        });
                      },
                    ),
                    Text("I accept the terms and conditions.",
                      style: TextStyle(color: Colors.green,fontWeight: FontWeight.bold,fontSize: 17),
                    ),
                  ],
                ),
              ),
              actions: <Widget>[
                ElevatedButton(
                  style: ElevatedButton.styleFrom(primary: Colors.green),
                  child: Text("Cancel"),
                  onPressed: () {
                    Navigator.of(context).pop();
                  },
                ),
                ElevatedButton(
                  style: ElevatedButton.styleFrom(primary: Colors.purple),
                  child: Text("Accept"),
                  onPressed: () {
                    if (termsAccepted) {
                      Navigator.of(context).pop(); // Close the dialog
                      _showConfirmationDialog(context);
                    }
                  },
                ),
              ],
            );
          },
        );
      },
    );
  }

  void _showConfirmationDialog(BuildContext context) {
    showDialog(
      context: context,
      builder: (BuildContext context) {
        return AlertDialog(
          title: Text("Confirmation"),
          content: Text("You have accepted the terms and conditions. Proceed to add your garage?"),
          actions: <Widget>[
            ElevatedButton(
              style: ElevatedButton.styleFrom(primary: Colors.red),
              child: Text("Cancel"),
              onPressed: () {
                Navigator.of(context).pop();
              },
            ),
            ElevatedButton(
              style: ElevatedButton.styleFrom(primary: Colors.green),
              child: Text("Proceed"),
              onPressed: () {
                Navigator.of(context).pop(); // Close the dialog
                Navigator.pushNamed(context, 'add'); // Proceed to the add garage page
              },
            ),
          ],
        );
      },
    );
  }

  void _showLogoutDialog(BuildContext context) {
    showDialog(
      context: context,
      builder: (BuildContext context) {
        return AlertDialog(
          title: Text("Logout Confirmation"),
          content: Text("Are you sure you want to logout?"),
          actions: <Widget>[
            ElevatedButton(
              style: ElevatedButton.styleFrom(primary: Colors.green),
              child: Text("Cancel"),
              onPressed: () {
                Navigator.of(context).pop();
              },
            ),
            ElevatedButton(
              style: ElevatedButton.styleFrom(primary: Colors.red),
              child: Text("Confirm"),
              onPressed: () {
                Navigator.of(context).pop(); // Close the dialog
                Navigator.pushReplacementNamed(context, 'confirm'); // Use pushReplacementNamed
              },
            ),
          ],
        );
      },
    );
  }
}

class AddGaragePage extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text("Add Your Garage"),
      ),
      body: Center(
        child: Text("This is the Add Your Garage page."),
      ),
    );
  }
}
