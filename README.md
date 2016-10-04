metry
===============

A PHP class that can take the following list of readings and output the resulting 5 interpolated values. The first and last values have been included. 

    Input (date, reading value)

    2010-05-01 12:20:08 858 
    2010-06-05 16:30:54	1009
    2010-07-04 08:11:20	1156
    2010-08-02 14:06:20	1293
    2010-08-31 13:50:00	1345
    2010-10-03 17:34:20	1512
    
    Output (date, interpolated reading value)
    2010-06-01 00:00:00	988.87422566161
    2010-07-01 00:00:00	<value 2>
    2010-08-01 00:00:00	<value 3>
    2010-09-01 00:00:00	<value 4>
    2010-10-01 00:00:00	1498.2384995078

Author: Emmanuel Osimosu
