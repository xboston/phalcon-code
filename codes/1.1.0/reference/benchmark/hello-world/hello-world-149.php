# ab -n 2000 -c 10 http://localhost/bench/codeigniter/index.php/say/hello
This is ApacheBench, Version 2.3 <$Revision: 655654 $>
Copyright 1996 Adam Twiss, Zeus Technology Ltd, http://www.zeustech.net/
Licensed to The Apache Software Foundation, http://www.apache.org/

Benchmarking localhost (be patient)


Server Software:        Apache/2.2.22
Server Hostname:        localhost
Server Port:            80

Document Path:          /bench/helloworld/codeigniter/index.php/say/hello
Document Length:        16 bytes

Concurrency Level:      10
Time taken for tests:   1.888 seconds
Complete requests:      2000
Failed requests:        0
Write errors:           0
Total transferred:      418000 bytes
HTML transferred:       32000 bytes
Requests per second:    1059.05 [#/sec] (mean)
Time per request:       9.442 [ms] (mean)
Time per request:       0.944 [ms] (mean, across all concurrent requests)
Transfer rate:          216.15 [Kbytes/sec] received

Connection Times (ms)
              min  mean[+/-sd] median   max
Connect:        0    9   4.1      9      33
Processing:     0    0   0.8      0      19
Waiting:        0    0   0.7      0      16
Total:          3    9   4.2      9      33

Percentage of the requests served within a certain time (ms)
  50%      9
  66%     10
  75%     11
  80%     12
  90%     14
  95%     16
  98%     21
  99%     24
 100%     33 (longest request)

