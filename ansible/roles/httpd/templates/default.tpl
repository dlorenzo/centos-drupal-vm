<VirtualHost *:80>
  ServerAdmin webmaster@localhost
  DocumentRoot {{ doc_root }}

  <Directory />
          Options Indexes FollowSymLinks Includes ExecCGI
          AllowOverride ALL
  </Directory>


  <Directory {{ doc_root }}>
    Options Indexes FollowSymLinks Includes ExecCGI
    AllowOverride All
    Require all granted
  </Directory>

  ErrorLog "/var/log/httpd/error_log"
  CustomLog "/var/log/httpd/access_log" common
</VirtualHost>
