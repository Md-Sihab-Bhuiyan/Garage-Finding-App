import 'package:flutter/material.dart';

class MyServicesPage extends StatefulWidget {
  const MyServicesPage({Key? key}) : super(key: key);

  @override
  State<MyServicesPage> createState() => _MyServicesPageState();
}

class _MyServicesPageState extends State<MyServicesPage> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        backgroundColor: Colors.blueGrey,
        title: Text(
          'Other Services',
          style: TextStyle(
            fontSize: 30,
            fontWeight: FontWeight.bold,
          ),
        ),
        centerTitle: true,
      ),
      body: Stack(
        children: [
          // Background Image
          Container(
            decoration: BoxDecoration(
              image: DecorationImage(
                image: AssetImage('assets/s2.jpg'), // Replace with your image path
                fit: BoxFit.cover,
              ),
            ),
          ),
          SingleChildScrollView(
            child: Column(
              children: [
                SizedBox(
                  height: 30,
                ),
                Padding(
                  padding: const EdgeInsets.all(10.0),
                  child: Column(
                    children: [
                      buildLocationButton(
                        text: 'Engine Repair',
                        subtext: 'Quality engine repair service to keep your vehicle running smoothly.',
                        buttonText: 'Click for Search',
                        buttonTextColor: Colors.purple,
                        buttonBackgroundColor: Colors.green.shade200,
                        mainTextColor: Colors.black,
                        subTextColor: Colors.white,
                        imageAsset: 'assets/engineering.png', // Add the image asset path
                        onPressed: () {
                          Navigator.pushNamed(context, 'en_repair_se');
                        },
                      ),
                      SizedBox(height: 10), // Increase the height of the SizedBox
                      buildLocationButton(
                        text: 'Brake Repair',
                        subtext: 'Expert brake repair to ensure your safety on the road.',
                        buttonText: 'Click for Search',
                        buttonTextColor: Colors.pinkAccent,
                        buttonBackgroundColor: Colors.indigo.shade100,
                        mainTextColor: Colors.red,
                        subTextColor: Colors.white,
                        imageAsset: 'assets/pedal.png', // Add the image asset path
                        onPressed: () {
                          Navigator.pushNamed(context, 'br_repair_se');
                        },
                      ),
                      SizedBox(height: 10), // Increase the height of the SizedBox
                      buildLocationButton(
                        text: 'Tire Repair',
                        subtext: 'Quick and reliable tire repair to keep you rolling.',
                        buttonText: 'Click for Search',
                        buttonTextColor: Colors.blue,
                        buttonBackgroundColor: Colors.orange.shade200,
                        mainTextColor: Colors.purple,
                        subTextColor: Colors.white,
                        imageAsset: 'assets/car.png', // Add the image asset path
                        onPressed: () {
                          Navigator.pushNamed(context, 't_repair_se');
                        },
                      ),
                      SizedBox(height: 10), // Increase the height of the SizedBox
                      buildLocationButton(
                        text: 'Battery Repair',
                        subtext: 'Battery repair and replacement for reliable starting power.',
                        buttonText: 'Click for Search',
                        buttonTextColor: Colors.black,
                        buttonBackgroundColor: Colors.pink.shade100,
                        mainTextColor: Colors.blue,
                        subTextColor: Colors.white,
                        imageAsset: 'assets/car-battery.png', // Add the image asset path
                        onPressed: () {
                          Navigator.pushNamed(context, 'ba_repair_se');
                        },
                      ),
                      SizedBox(height: 10), // Increase the height of the SizedBox
                      buildLocationButton(
                        text: 'Steering Repair',
                        subtext: 'Steering system repair for precise control and handling.',
                        buttonText: 'Click for Search',
                        buttonTextColor: Colors.yellow,
                        buttonBackgroundColor: Colors.deepPurple.shade200,
                        mainTextColor: Colors.black,
                        subTextColor: Colors.white,
                        imageAsset: 'assets/steering-wheel.png', // Add the image asset path
                        onPressed: () {
                          Navigator.pushNamed(context, 'st_repair_se');
                        },
                      ),
                    ],
                  ),
                ),
              ],
            ),
          ),
        ],
      ),
    );
  }

  Widget buildLocationButton({
    required String text,
    required String subtext,
    required String buttonText,
    required Color buttonTextColor,
    required Color buttonBackgroundColor,
    required Color mainTextColor,
    required Color subTextColor,
    required String imageAsset, // Image asset path
    required VoidCallback onPressed,
  }) {
    return Container(
      width: double.infinity,
      height: 250, // Adjust the height of the button
      margin: EdgeInsets.symmetric(vertical: 10),
      decoration: BoxDecoration(
        color: buttonBackgroundColor,
        borderRadius: BorderRadius.circular(10),
      ),
      child: Column(
        mainAxisAlignment: MainAxisAlignment.center,
        children: [
          Text(
            text,
            style: TextStyle(fontSize: 24, color: mainTextColor, fontWeight: FontWeight.bold),
          ),
          SizedBox(height: 10),
          Text(
            subtext,
            style: TextStyle(fontSize: 16, color: subTextColor, fontWeight: FontWeight.bold),
            textAlign: TextAlign.center,
          ),
          SizedBox(height: 5),
          Image.asset(
            imageAsset,
            height: 100, // Adjust the height of the image
          ),
          SizedBox(height: 5),
          TextButton(
            onPressed: onPressed,
            child: Text(
              buttonText,
              style: TextStyle(fontSize: 20, color: buttonTextColor, fontWeight: FontWeight.bold),
            ),
          ),
        ],
      ),
    );
  }
}
