
	# ab -n 2000 -c 10 http://localhost/bench/helloworld/kohana/index.php/say/hello
	This is ApacheBench, Version 2.3 <$Revision: 655654 $>
	Copyright 1996 Adam Twiss, Zeus Technology Ltd, http://www.zeustech.net/
	Licensed to The Apache Software Foundation, http://www.apache.org/

	Benchmarking localhost (be patient)


	Server Software:        Apache/2.2.22
	Server Hostname:        localhost
	Server Port:            80

	Document Path:          /bench/helloworld/kohana/index.php/say/hello
	Document Length:        15 bytes

	Concurrency Level:      10
	Time taken for tests:   2.324 seconds
	Complete requests:      2000
	Failed requests:        0
	Write errors:           0
	Total transferred:      446446 bytes
	HTML transferred:       30030 bytes
	Requests per second:    860.59 [#/sec] (mean)
	Time per request:       11.620 [ms] (mean)
	Time per request:       1.162 [ms] (mean, across all concurrent requests)
	Transfer rate:          187.60 [Kbytes/sec] received

	Connection Times (ms)
	              min  mean[+/-sd] median   max
	Connect:        0   11   5.1     10      64
	Processing:     0    0   1.9      0      39
	Waiting:        0    0   1.4      0      35
	Total:          3   11   5.3     11      64

	Percentage of the requests served within a certain time (ms)
	  50%     11
	  66%     13
	  75%     15
	  80%     15
	  90%     17
	  95%     18
	  98%     24
	  99%     31
	 100%     64 (longest request)

