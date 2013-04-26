# ab -n 1000 -c 5 http://localhost/bench/micro/silex/say/hello/Sonny
This is ApacheBench, Version 2.3 <$Revision: 655654 $>
Copyright 1996 Adam Twiss, Zeus Technology Ltd, http://www.zeustech.net/
Licensed to The Apache Software Foundation, http://www.apache.org/

Benchmarking localhost (be patient)


Server Software:        Apache/2.2.22
Server Hostname:        localhost
Server Port:            80

Document Path:          /bench/micro/silex/say/hello/Sonny
Document Length:        12 bytes

Concurrency Level:      5
Time taken for tests:   2.228 seconds
Complete requests:      1000
Failed requests:        0
Write errors:           0
Total transferred:      225000 bytes
HTML transferred:       12000 bytes
Requests per second:    448.75 [#/sec] (mean)
Time per request:       11.142 [ms] (mean)
Time per request:       2.228 [ms] (mean, across all concurrent requests)
Transfer rate:          98.60 [Kbytes/sec] received

Connection Times (ms)
              min  mean[+/-sd] median   max
Connect:        0   11   5.1     10      44
Processing:     0    0   1.1      0      26
Waiting:        0    0   1.1      0      26
Total:          5   11   5.1     10      45

Percentage of the requests served within a certain time (ms)
  50%     10
  66%     12
  75%     13
  80%     14
  90%     17
  95%     20
  98%     25
  99%     29
 100%     45 (longest request)

