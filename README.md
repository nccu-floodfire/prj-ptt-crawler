# README #

This README would normally document whatever steps are necessary to get your application up and running.

### What is this repository for? ###

* craw data from ptt(web based)
* save data into mysql DB

### How do I get start? ###

* install [composer](https://getcomposer.org/)
* `make init`
* `make`
* `./crawler --help`

### Cron job example

```
0 0 * * * /path/to/crawler --board=politics --sleep-between-retry=10 --start-date=$(date +\%Y-\%m-\%d --date='-3 day') --storage=rdb --db-username=<username> --db-password=<password> --db-host=<host ip> --db-port=<port> --timeout=10 --sleep-between-article=1 --stop-date=2014-01-01 --stop-on-duplicate=true > /tmp/politics.log 2>&1
```


### LICENSE

[GPLv3](http://www.gnu.org/licenses/gpl.txt)
