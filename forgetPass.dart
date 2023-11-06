import 'package:firebase_auth/firebase_auth.dart';
import 'package:flutter/material.dart';

class MYForgetPass extends StatefulWidget {
  const MYForgetPass({super.key});

  @override
  State<MYForgetPass> createState() => _MYForgetPassState();
}

class _MYForgetPassState extends State<MYForgetPass> {
  final _emailController = TextEditingController();

  @override
  void dispose() {
    _emailController.dispose();
    super.dispose();
  }

  Future passwordReset() async {
    try {
      await FirebaseAuth.instance.sendPasswordResetEmail(email: _emailController.text.trim());
      showDialog(context: context, builder: (context) {
        return AlertDialog(
          content: Text('Password reset link sent! Check your email!'),
        );
      });
    } on FirebaseAuthException catch (e) {
      print(e);
      showDialog(context: context, builder: (context) {
        return AlertDialog(
          content: Text(e.message.toString()),
        );
      });
    }
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      extendBodyBehindAppBar: true,
      appBar: AppBar(
        backgroundColor: Colors.red,
        elevation: 0,
        title: Text('Reset Password'),
        centerTitle: true,
        leading: IconButton(
          onPressed: () {
            Navigator.pop(context);
          },
          icon: Icon(Icons.arrow_back_ios_new_rounded, color: Colors.black),
        ),
      ),
      body: Container(
        margin: EdgeInsets.only(left: 25, right: 25),
        alignment: Alignment.center,
        child: SingleChildScrollView(
          child: Column(
            mainAxisAlignment: MainAxisAlignment.center,
            children: [
              Image.asset('assets/f1.png', width: 200, height: 200), // Add an image
              Text(
                'Reset Your Password',
                style: TextStyle(fontSize: 22, fontWeight: FontWeight.bold),
              ),
              SizedBox(
                height: 10,
              ),
              Text(
                'Enter your Email, and we will send you a password reset link!',
                style: TextStyle(fontSize: 16),
                textAlign: TextAlign.center,
              ),
              SizedBox(
                height: 30,
              ),
              Padding(
                padding: const EdgeInsets.symmetric(horizontal: 25.0),
                child: TextField(
                  controller: _emailController,
                  decoration: InputDecoration(
                    enabledBorder: OutlineInputBorder(
                      borderSide: BorderSide(color: Colors.white),
                      borderRadius: BorderRadius.circular(12),
                    ),
                    focusedBorder: OutlineInputBorder(
                      borderSide: BorderSide(color: Colors.deepPurple),
                      borderRadius: BorderRadius.circular(12),
                    ),
                    hintText: 'Email',
                    fillColor: Colors.grey[200],
                    filled: true,
                  ),
                ),
              ),
              SizedBox(
                height: 25,
              ),
              MaterialButton(
                onPressed: passwordReset,
                child: Text('Reset Password', style: TextStyle(color: Colors.white)),
                color: Colors.red,
              ),
            ],
          ),
        ),
      ),
    );
  }
}
