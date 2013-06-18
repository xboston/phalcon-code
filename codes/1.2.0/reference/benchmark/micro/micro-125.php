# ab -n 1000 -c 5 http://localhost/bench/micro/phalcon/say/hello/Sonny
This is ApacheBench, Version 2.3 <$Revision: 655654 $>
Copyright 1996 Adam Twiss, Zeus Technology Ltd, http://www.zeustech.net/
Licensed to The Apache Software Foundation, http://www.apache.org/

Benchmarking localhost (be patient)


Server Software:        Apache/2.2.22
Server Hostname:        localhost
Server Port:            80

Document Path:          /bench/micro/phalcon/say/hello/Sonny
Document Length:        12 bytes

Concurrency Level:      5
Time taken for tests:   0.397 seconds
Complete requests:      1000
Failed requests:        0
Write errors:           0
Total transferred:      205000 bytes
HTML transferred:       12000 bytes
Requests per second:    2516.74 [#/sec] (mean)
Time per request:       1.987 [ms] (mean)
Time per request:       0.397 [ms] (mean, across all concurrent requests)
Transfer rate:          503.84 [Kbytes/sec] received

Connection Times (ms)
              min  mean[+/-sd] median   max
Connect:        0    2   0.9      2      11
Processing:     0    0   0.2      0       5
Waiting:        0    0   0.2      0       4
Total:          1    2   0.9      2      11

Percentage of the requests served within a certain time (ms)
  50%      2
  66%      2
  75%      2
  80%      2
  90%      3
  95%      4
  98%      5
  99%      5
 100%     11 (longest request)

