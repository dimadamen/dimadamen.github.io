To run the code, use matlab

Examples of runs
>> pdf = @(x) exppdf (x, 2);
>> MCMC (pdf, 10000);

--> Note that a figure with a red plot (actual pdf) and histogram of samples is generated