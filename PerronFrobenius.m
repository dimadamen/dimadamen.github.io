% Created by: Dima Damen
% Date: December 2008

% This function randomly creates a right stochastic matrix of size nxn
% It then multiplies the matrix by itself 100 times and presents the result
% the aim is to show examples of Perron Ferron's theorem

function PerronFrobenius (n)
   A = createStochastic (n)
   res = A;
   for i = 1:100
       res = res * A;
   end;
   res
end

function A = createStochastic (n)
   A = zeros (n,n);
   for i = 1:n
      A(i,1) = rand*0.5;
      for j = 2:n-1
          A(i,j) = rand * (1-sum(A(i,1:j-1)));
      end;
      A(i,n) = 1-sum(A(i,1:n-1));
   end;
end