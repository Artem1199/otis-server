# otis-server

Display live graph of incoming Arduino data, allows the ability to save data, and view history.  For use with otis-tcp, and otis-arduino.

1. requires dhp.php for mysql connection, not uploaded
2. used with apache2 server

#Setting up Apache2 Server
1. Install Apache2 `sudo apt update  && sudo apt install apache2`
2. Make a folder to this website in `/var/www/FOLDERNAME` (FOLDERNAME is whatever you want it to be)
3. Copy the contents of this repo to `/var/www/FOLDERNAME` i.e. `sudo cp -a /home/USERNAME/Desktop/Git/otis-Server/. /var/www/otis/`
4. Settup the VirtualHost:
   1. `cd /etc/apache2/sites-available/` then `sudo cp 000-default.conf FOLDERNAME.conf`
   2. Edit the .conf file `sudo nano FOLDERNAME.conf`
   3. Edit `ServerName` with your email
   4. Edit DocumentRoot with `DocumentRoot /var/www/FOLDERNAME/
   5. Add ServerName `ServerName OtisData.example.xyz`
5. Reload Apache2 `systemctl reload FOLDERNAME`
6. Open `OtisData.example.xyz/live.php` in your browser should bring a page with a graph.

Reference this [Ubuntu Tutorial](https://ubuntu.com/tutorials/install-and-configure-apache#1-overview) for more info.


I've bought and domain and I'm occasionally hosting this website at: http://otisdata.xyz/live.php




