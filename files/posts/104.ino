/*
  Blink
  Turns on an LED on for one second, then off for one second, repeatedly.

  Most Arduinos have an on-board LED you can control. On the UNO, MEGA and ZERO
  it is attached to digital pin 13, on MKR1000 on pin 6. LED_BUILTIN takes care
  of use the correct LED pin whatever is the board used.
  If you want to know what pin the on-board LED is connected to on your Arduino model, check
  the Technical Specs of your board  at https://www.arduino.cc/en/Main/Products

  This example code is in the public domain.

  modified 8 May 2014
  by Scott Fitzgerald

  modified 2 Sep 2016
  by Arturo Guadalupi
*/

int led_13 = 13;
int led_12 = 12;
int led_11 = 11;
int sensor_A1 = 1;

// the setup function runs once when you press reset or power the board
void setup() {
  // initialize digital pin LED_BUILTIN as an output.

  Serial.begin(9600);
}

// the loop function runs over and over again forever
void loop() {
    float voltage = analogRead(sensor_A1) * (5/1023.0);
    
    if (voltage < 1) {
    digitalWrite(5, LOW);
    digitalWrite(3, LOW);
    for (int value=0;value<170;value++){
    analogWrite(6, value);
    delay(5);
    }
    for (int value=170;value>0;value--){
    analogWrite(6, value);
    delay(5);
    }
    delay(5);

    
  } else if (voltage < 3) {
    digitalWrite(6, LOW);
    digitalWrite(3, LOW);
    for (int value=0;value<170;value++){
    analogWrite(5, value);
    delay(5);
    }
    for (int value=170;value>0;value--){
     
    analogWrite(5, value);
    delay(5);
    }
    delay(5);
  } else {
    digitalWrite(6, LOW);
    digitalWrite(3, LOW);
    for (int value=0;value<170;value++){
    analogWrite(3, value);
    delay(5);
    }
    for (int value=170;value>0;value--){
    analogWrite(3, value);
    delay(5);
    }
    delay(5);
  }

}
