# ab -n 10 -c 5 http://localhost/bench/cake/say/hello
This is ApacheBench, Version 2.3 <$Revision: 655654 $>
Copyright 1996 Adam Twiss, Zeus Technology Ltd, http://www.zeustech.net/
Licensed to The Apache Software Foundation, http://www.apache.org/

Benchmarking localhost (be patient).....done


Server Software:        Apache/2.2.22
Server Hostname:        localhost
Server Port:            80

Document Path:          /bench/cake/say/hello
Document Length:        16 bytes

Concurrency Level:      5
Time taken for tests:   30.051 seconds
Complete requests:      10
Failed requests:        0
Write errors:           0
Total transferred:      1680 bytes
HTML transferred:       160 bytes
Requests per second:    0.33 [#/sec] (mean)
Time per request:       15025.635 [ms] (mean)
Time per request:       3005.127 [ms] (mean, across all concurrent requests)
Transfer rate:          0.05 [Kbytes/sec] received

Connection Times (ms)
min  mean[+/-sd] median   max
Connect:        0    2   3.6      0      11
Processing: 15009 15020   9.8  15019   15040
Waiting:        9   21   7.9     25      33
Total:      15009 15022   8.9  15021   15040

Percentage of the requests served within a certain time (ms)
50%  15021
66%  15024
75%  15024
80%  15032
90%  15040
95%  15040
98%  15040
99%  15040
100%  15040 (longest request)

