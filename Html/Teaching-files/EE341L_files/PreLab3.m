% K. Clay McKell
% EE341L
% PreLab 3.1

close all; clear all; clc;

%% Step 1: Set Parameters in MATLAB
fc = 10000;       % Cutoff freq (Hz)
wc = 2*pi*fc;     % Cutoff freq (rad/s)
f = 8*10^3;       % Wave freq
T = 1/f;          % Wave period
A = 1;            % Set amplitude (arbitrary)
N0 = 2^5;         % Design parameter!  32 samples will
                    %   give me frequency data up to 
                    %   the 16th harmonic.
Ts = T/N0;        % Sampling period.
fs = 1/Ts;        % Sampling frequency.

%% Step 2: Set up and run simulation in SIMULINK

% Open the model
% In "Configuration Parameters:
%   Change "Stop Time" to T-Ts.
%   Change Solver Type to "Fixed-step"
%   Choose a solver (ode3 is fine)
%   Specify the Fixed Step Size as Ts
%
% After these tasks have been done (before running this script),
%   run the simulation:
sim('PreLab3model');


%% Step 3: Perform frquency analysis on simulation output in MATLAB
x = simout1;          % Unfiltered time signal
y = simout;           % 1st order filtered time signal
z = simout2;          % 4th order filtered time signal

% Take DFT of 3 time signals.
X = fft(x);
Y = fft(y);
Z = fft(z);

% The vectors X, Y, and Z are complex.
% To plot the frequency signals, we need to look at their magnitude and
%   phase separately.
xmag = abs(X);
xphase = (180/pi)*angle(X);   % I like degress instead of radians.
ymag = abs(Y);
yphase = (180/pi)*angle(Y);
zmag = abs(Z);
zphase = (180/pi)*angle(Z);

% What are we going to plot these against?
% Previously, we have just left the horizontal axis as the Coefficient
%   Index, which ran from 0, 1, 2,...
% Now, I'd like to actually plot against specific frequencies.

fvec = 0:1:N0-1;        % Start with indices: 0, 1, 2,...
fvec =  fvec/T;         % We'll plot X(k) at k*f, k = 0,1,...,N0-1.
fnyq = fs/2;            % Nyquist frequency is half the sampling freq.
fvec = fvec(fvec<=fnyq);    % Plot only up to the Nyquist freq.
Lnyq = length(fvec);

% Trim all the Frequency signals to only run up until the Nyquist freq.
xmagplot=xmag(1:Lnyq);
xphaseplot=xphase(1:Lnyq);
ymagplot=ymag(1:Lnyq);
yphaseplot=yphase(1:Lnyq);
zmagplot=zmag(1:Lnyq);
zphaseplot=zphase(1:Lnyq);

% Plotting
figure;
subplot(2,1,1)
stem(fvec,xmagplot);
title('Spectrum of Unfiltered Square Wave, f = 8kHz, A = 1')
ylabel('Discrete Fourier Transform Magnitude: |X(f)|')
subplot(2,1,2)
stem(fvec,xphaseplot);
ylabel('Discrete Fourier Transform Phase: \angle X(f) (deg)')
xlabel('Frequency: f (Hz)')

figure; 
subplot(2,1,1)
stem(fvec,ymagplot)
hold on;
stem(fvec,zmagplot,'r.')
legend('First Order Butterworth','Fourth Order Butterworth');
hold off;
title('Spectrum of Filtered Square Wave, f = 8kHz, A = 1');
ylabel('Discrete Fourier Transform Magnitude: |\cdot|')
subplot(2,1,2)
stem(fvec,yphaseplot)
hold on;
stem(fvec,zphaseplot,'r.')
hold off;
ylabel('Discrete Fourier Transform Phase: \angle\cdot (deg)')
xlabel('Frequency: f (Hz)')