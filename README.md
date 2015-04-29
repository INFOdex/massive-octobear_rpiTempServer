# massive-octobear_rpiTempServer
Raspberry Pi temperature logger and webserver for ECE 331
# Author: Peter L.
#This information is found in README.md


A breakout board constructed by the instructor is used to gather temperature data. The data is then logged
in a SQlite3 database. Using the os and sys libraries in python, an instance of the bash shell is emulated
and i2ctools is used to query the breakout board's temperature sensor (and digital to analog converter (DAC)).
The python library "sqlite" is used to dump the data from the i2c query to an sqlite database located on the pi.
Cron is used to run this script every minute. The python script that does what is mentioned above can be found 
in this repository under the name:


"rawdata"


Data was then organized by timestamp (date and time) and plotted using matplotlib/pyplot. This program can be
 found in this repository under the name:


"graph_maker"


A python script was written to compare the time of a file's creation to a designated time 5 minutes from when the website is 
accessed. This script (most notably) uses the os, time, and datetime python libraries. This script was pointed at the graph of 
the data output by graph)maker. This file can be found in this git repository under the nam:


"timecreated"


A php file is then used to call the previous script, and display the graph that is generated. It can be found in this repository under the name:


"index.php"



