# ab -n 2000 -c 10 http://localhost/bench/helloworld/zendfw/public/index.php
This is ApacheBench, Version 2.3 <$Revision: 655654 $>
Copyright 1996 Adam Twiss, Zeus Technology Ltd, http://www.zeustech.net/
Licensed to The Apache Software Foundation, http://www.apache.org/

Benchmarking localhost (be patient)


Server Software:        Apache/2.2.22
Server Hostname:        localhost
Server Port:            80

Document Path:          /bench/helloworld/zendfw/public/index.php
Document Length:        16 bytes

Concurrency Level:      10
Time taken for tests:   5.641 seconds
Complete requests:      2000
Failed requests:        0
Write errors:           0
Total transferred:      418000 bytes
HTML transferred:       32000 bytes
Requests per second:    354.55 [#/sec] (mean)
Time per request:       28.205 [ms] (mean)
Time per request:       2.820 [ms] (mean, across all concurrent requests)
Transfer rate:          72.36 [Kbytes/sec] received

Connection Times (ms)
min  mean[+/-sd] median   max
Connect:        0   27   9.6     25      89
Processing:     0    1   3.0      0      70
Waiting:        0    0   2.9      0      70
Total:          9   28   9.6     26      90

Percentage of the requests served within a certain time (ms)
50%     26
66%     28
75%     32
80%     34
90%     41
95%     46
98%     55
99%     62
100%     90 (longest request)

