# ab -n 2000 -c 10 http://localhost/bench/helloworld/nette/www/index.php

This is ApacheBench, Version 2.3 <$Revision: 655654 $>
Copyright 1996 Adam Twiss, Zeus Technology Ltd, http://www.zeustech.net/
Licensed to The Apache Software Foundation, http://www.apache.org/

Benchmarking localhost (be patient)


Server Software:        Apache/2.2.22
Server Hostname:        localhost
Server Port:            80

Document Path:          /bench/helloworld/nette/www/index.php
Document Length:        24963 bytes

Concurrency Level:      10
Time taken for tests:   7.750 seconds
Complete requests:      2000
Failed requests:        200
(Connect: 0, Receive: 0, Length: 200, Exceptions: 0)
Write errors:           0
Total transferred:      50370200 bytes
HTML transferred:       49926200 bytes
Requests per second:    258.07 [#/sec] (mean)
Time per request:       38.749 [ms] (mean)
Time per request:       3.875 [ms] (mean, across all concurrent requests)
Transfer rate:          6347.24 [Kbytes/sec] received

Connection Times (ms)
min  mean[+/-sd] median   max
Connect:        0   38  13.1     34     115
Processing:     0    1   4.7      0      99
Waiting:        0    0   4.5      0      98
Total:         15   39  13.2     34     116

Percentage of the requests served within a certain time (ms)
50%     34
66%     38
75%     46
80%     50
90%     58
95%     64
98%     75
99%     82
100%    116 (longest request)

