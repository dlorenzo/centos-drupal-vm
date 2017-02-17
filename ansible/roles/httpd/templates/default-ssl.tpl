<VirtualHost *:443>
  ServerAdmin webmaster@localhost
  DocumentRoot {{ doc_root }}
  ServerName vagrant:443
  SSLProtocol -All +TLSv1 +TLSv1.1 +TLSv1.2
  SSLCertificateFile /etc/ssl/private/certs/server.crt
  SSLCertificateKeyFile /etc/ssl/private/certs/server.key

  <Directory />
          Options Indexes FollowSymLinks Includes ExecCGI
          AllowOverride ALL
  </Directory>

  <Directory {{ doc_root }}>
    Options Indexes FollowSymLinks Includes ExecCGI
    AllowOverride All
    Require all granted
  </Directory>

  ErrorLog "/var/log/httpd/ssl_error_log"
  CustomLog "/var/log/httpd/ssl_access_log" common
</VirtualHost>