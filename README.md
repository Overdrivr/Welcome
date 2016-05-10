# Landing Page configuration

To run the php follow these steps:

* Copy configServer-example.php to configServer.php and update it with mysql server information

* In your database you need to have a table mails which will collect all e-mails:
```
CREATE TABLE IF NOT EXISTS `mails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;
```


Enjoy!
