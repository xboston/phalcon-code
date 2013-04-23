
	# ab -n 2000 -c 10 http://localhost/bench/helloworld/phalcon/index.php?_url=/say/hello
	This is ApacheBench, Version 2.3 <$Revision: 655654 $>
	Copyright 1996 Adam Twiss, Zeus Technology Ltd, http://www.zeustech.net/
	Licensed to The Apache Software Foundation, http://www.apache.org/

	Benchmarking localhost (be patient)


	Server Software:        Apache/2.2.22
	Server Hostname:        localhost
	Server Port:            80

	Document Path:          /bench/helloworld/phalcon/index.php?_url=/say/hello
	Document Length:        16 bytes

	Concurrency Level:      10
	Time taken for tests:   0.789 seconds
	Complete requests:      2000
	Failed requests:        0
	Write errors:           0
	Total transferred:      418000 bytes
	HTML transferred:       32000 bytes
	Requests per second:    2535.82 [#/sec] (mean)
	Time per request:       3.943 [ms] (mean)
	Time per request:       0.394 [ms] (mean, across all concurrent requests)
	Transfer rate:          517.56 [Kbytes/sec] received

	Connection Times (ms)
	              min  mean[+/-sd] median   max
	Connect:        0    4   1.7      3      23
	Processing:     0    0   0.2      0       6
	Waiting:        0    0   0.2      0       6
	Total:          2    4   1.7      3      23

	Percentage of the requests served within a certain time (ms)
	  50%      3
	  66%      4
	  75%      4
	  80%      4
	  90%      5
	  95%      6
	  98%      8
	  99%     14
	 100%     23 (longest request)

