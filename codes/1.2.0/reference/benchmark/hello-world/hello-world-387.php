# ab -n 2000 -c 10 http://localhost/bench/helloworld/laravel/public/say/hello

This is ApacheBench, Version 2.3 <$Revision: 655654 $>
Copyright 1996 Adam Twiss, Zeus Technology Ltd, http://www.zeustech.net/
Licensed to The Apache Software Foundation, http://www.apache.org/

Benchmarking localhost (be patient)


Server Software:        Apache/2.2.22
Server Hostname:        localhost
Server Port:            80

Document Path:          /bench/helloworld/laravel/public/say/hello
Document Length:        15 bytes

Concurrency Level:      10
Time taken for tests:   4.090 seconds
Complete requests:      2000
Failed requests:        0
Write errors:           0
Total transferred:      1665162 bytes
HTML transferred:       30045 bytes
Requests per second:    489.03 [#/sec] (mean)
Time per request:       20.449 [ms] (mean)
Time per request:       2.045 [ms] (mean, across all concurrent requests)
Transfer rate:          397.61 [Kbytes/sec] received

Connection Times (ms)
min  mean[+/-sd] median   max
Connect:        0   20   7.6     19      92
Processing:     0    0   2.5      0      53
Waiting:        0    0   2.5      0      53
Total:          6   20   7.6     19      93

Percentage of the requests served within a certain time (ms)
50%     19
66%     21
75%     23
80%     24
90%     29
95%     34
98%     42
99%     48
100%     93 (longest request)

