import 'package:flutter/material.dart';

class MyHome_u extends StatefulWidget {
  const MyHome_u({Key? key}) : super(key: key);

  @override
  State<MyHome_u> createState() => _MyOpeningState();
}

class _MyOpeningState extends State<MyHome_u> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        backgroundColor: Colors.green, // Set the background color to white
        title: Text(
          'User Page',
          style: TextStyle(
            fontSize: 30,
            fontWeight: FontWeight.bold, // Make the text bold
          ),
        ),
        centerTitle: true, // Center-align the title
      ),
      backgroundColor: Colors.white, // Set the background color to white
      body: SingleChildScrollView(
        child: Column(
          children: [
            SizedBox(
              height: 30,
            ),
            Center(
              child: Text(
                'This is an User page',
                style: TextStyle(fontSize: 30),
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
                    text: 'CAR WASH',
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
                  buildLocationButton(
                    text: 'ABOUT GARAGE',
                    onPressed: () {
                      Navigator.pushNamed(context, 'aboutgarage');
                    },
                    buttonColor: Colors.blue.shade50,
                  ),
                  SizedBox(height: 5),
                  buildLocationButton(
                    text: 'LOGOUT',
                    onPressed: () {
                      Navigator.pushNamed(context, 'confirm');
                    },
                    buttonColor: Colors.yellow.shade100,
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
}
