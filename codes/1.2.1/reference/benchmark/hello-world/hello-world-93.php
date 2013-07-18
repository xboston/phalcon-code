# ab -n 2000 -c 10 http://localhost/bench/Symfony/web/app.php/say/hello/
This is ApacheBench, Version 2.3 <$Revision: 655654 $>
Copyright 1996 Adam Twiss, Zeus Technology Ltd, http://www.zeustech.net/
Licensed to The Apache Software Foundation, http://www.apache.org/

Benchmarking localhost (be patient)


Server Software:        Apache/2.2.22
Server Hostname:        localhost
Server Port:            80

Document Path:          /bench/Symfony/web/app.php/say/hello/
Document Length:        16 bytes

Concurrency Level:      5
Time taken for tests:   1.848 seconds
Complete requests:      1000
Failed requests:        0
Write errors:           0
Total transferred:      249000 bytes
HTML transferred:       16000 bytes
Requests per second:    541.01 [#/sec] (mean)
Time per request:       9.242 [ms] (mean)
Time per request:       1.848 [ms] (mean, across all concurrent requests)
Transfer rate:          131.55 [Kbytes/sec] received

Connection Times (ms)
              min  mean[+/-sd] median   max
Connect:        0    9   4.8      8      61
Processing:     0    0   0.6      0      15
Waiting:        0    0   0.6      0      15
Total:          4    9   4.8      8      61

Percentage of the requests served within a certain time (ms)
  50%      8
  66%      9
  75%     11
  80%     12
  90%     15
  95%     18
  98%     22
  99%     30
 100%     61 (longest request)

