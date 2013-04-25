# ab -n 1000 -c 5 http://localhost/bench/micro/slim/say/hello/Sonny
This is ApacheBench, Version 2.3 <$Revision: 655654 $>
Copyright 1996 Adam Twiss, Zeus Technology Ltd, http://www.zeustech.net/
Licensed to The Apache Software Foundation, http://www.apache.org/

Benchmarking localhost (be patient)


Server Software:        Apache/2.2.22
Server Hostname:        localhost
Server Port:            80

Document Path:          /bench/micro/slim/say/hello/Sonny
Document Length:        13 bytes

Concurrency Level:      5
Time taken for tests:   0.882 seconds
Complete requests:      1000
Failed requests:        0
Write errors:           0
Total transferred:      206000 bytes
HTML transferred:       13000 bytes
Requests per second:    1134.21 [#/sec] (mean)
Time per request:       4.408 [ms] (mean)
Time per request:       0.882 [ms] (mean, across all concurrent requests)
Transfer rate:          228.17 [Kbytes/sec] received

Connection Times (ms)
              min  mean[+/-sd] median   max
Connect:        0    4   2.4      4      33
Processing:     0    0   0.5      0      11
Waiting:        0    0   0.5      0      11
Total:          2    4   2.4      4      33

Percentage of the requests served within a certain time (ms)
  50%      4
  66%      4
  75%      5
  80%      5
  90%      6
  95%      8
  98%     12
  99%     14
 100%     33 (longest request)

