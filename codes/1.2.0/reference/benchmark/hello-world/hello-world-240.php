# ab -n 2000 -c 10 http://localhost/bench/helloworld/fuel/public/say/hello
This is ApacheBench, Version 2.3 <$Revision: 655654 $>
Copyright 1996 Adam Twiss, Zeus Technology Ltd, http://www.zeustech.net/
Licensed to The Apache Software Foundation, http://www.apache.org/

Benchmarking localhost (be patient)


Server Software:        Apache/2.2.22
Server Hostname:        localhost
Server Port:            80

Document Path:          /bench/helloworld/fuel/public/say/hello
Document Length:        16 bytes

Concurrency Level:      10
Time taken for tests:   2.742 seconds
Complete requests:      2000
Failed requests:        0
Write errors:           0
Total transferred:      418000 bytes
HTML transferred:       32000 bytes
Requests per second:    729.42 [#/sec] (mean)
Time per request:       13.709 [ms] (mean)
Time per request:       1.371 [ms] (mean, across all concurrent requests)
Transfer rate:          148.88 [Kbytes/sec] received

Connection Times (ms)
min  mean[+/-sd] median   max
Connect:        0   13   6.0     12      79
Processing:     0    0   1.3      0      22
Waiting:        0    0   0.8      0      21
Total:          4   14   6.1     13      80

Percentage of the requests served within a certain time (ms)
50%     13
66%     15
75%     17
80%     17
90%     19
95%     24
98%     30
99%     38
100%     80 (longest request)

