# About
TweetBeer is a setup for automatically tweeting beers based on RFID tags. This was made for the purpose of tweeting an identified beer based on an RFID tag; however, this can apply to anything. I bought RFID keychain tags and hung the keychain from the neck of the beer bottles. 

# Requirements
Arduino Duemilanova or higher  
RFID reader  
RFID tags  
Computer to interface with  
Twitter Account  

# Setup
1. Set up the Arduino with the RFID reader, compile, and upload the sketch in the arduino folder. Make sure you're using the right pins or change the pins in the sketch.
2. Upload the 3 files under the `web` directory to an accessible webserver. Make sure to change `USERNAME:PASSWORD` on line 26 of post.php to match the username and password of the Twitter account that will be tweeting what you are drinking.
3. Change `beerdb` to match the RFID serial number of the tags you are using as well as the beers associated with those tags. 
4. Compile the RFID_Beer.pdf sketch making sure to change the address for `postingSite` to the one that host `post.php`.
5. Test by enjoying a nice libation.

# Issues
Please post any issues. If you would like to make any changes/improvements, please fork and make a pull request.