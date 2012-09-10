import processing.serial.*;

String currentTag;
Serial myPort;

String postingSite = "YOURSITE/post.php?id=";

void setup() { 
  myPort = new Serial(this, Serial.list()[0],2400);
  myPort.bufferUntil(10);
}  

void draw(){
}

void serialEvent(Serial myPort){
  currentTag = myPort.readStringUntil(10); 
  link(postingSite + currentTag);
//println(currentTag);
}