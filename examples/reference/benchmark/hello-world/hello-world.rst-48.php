
	# ab -n 2000 -c 10 http://localhost/bench/helloworld/yii/index.php?r=say/hello
	This is ApacheBench, Version 2.3 <$Revision: 655654 $>
	Copyright 1996 Adam Twiss, Zeus Technology Ltd, http://www.zeustech.net/
	Licensed to The Apache Software Foundation, http://www.apache.org/

	Benchmarking localhost (be patient)


	Server Software:        Apache/2.2.22
	Server Hostname:        localhost
	Server Port:            80

	Document Path:          /bench/helloworld/yii/index.php?r=say/hello
	Document Length:        61 bytes

	Concurrency Level:      10
	Time taken for tests:   2.081 seconds
	Complete requests:      2000
	Failed requests:        0
	Write errors:           0
	Total transferred:      508000 bytes
	HTML transferred:       122000 bytes
	Requests per second:    961.28 [#/sec] (mean)
	Time per request:       10.403 [ms] (mean)
	Time per request:       1.040 [ms] (mean, across all concurrent requests)
	Transfer rate:          238.44 [Kbytes/sec] received

	Connection Times (ms)
	              min  mean[+/-sd] median   max
	Connect:        0   10   4.3      9      42
	Processing:     0    0   1.0      0      24
	Waiting:        0    0   0.8      0      17
	Total:          3   10   4.3      9      42

	Percentage of the requests served within a certain time (ms)
	  50%      9
	  66%     11
	  75%     13
	  80%     14
	  90%     15
	  95%     17
	  98%     21
	  99%     26
	 100%     42 (longest request)

