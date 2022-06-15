# Import the libraries
# !/usr/bin/python
import sys
import math
import numpy as np
import pandas as pd
import matplotlib.pyplot as plt
from datetime import datetime
from datetime import date
import requests
import io
from fbprophet import Prophet


#Function to get data from Yahoo Finance
class YahooData:
    def fetch(ticker, start, end):
        headers = {
            'User-Agent': 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_2) AppleWebKit/601.3.9 (KHTML, like Gecko) Version/9.0.2 Safari/601.3.9'
        }

        url = "https://query1.finance.yahoo.com/v7/finance/download/" + str(ticker)
        x = int(datetime.strptime(start, '%Y-%m-%d').timestamp())

        y = int(datetime.strptime(end, '%Y-%m-%d').timestamp())
        url += "?period1=" + str(x) + "&period2=" + str(y) + "&interval=1d&events=history&includeAdjustedClose=true"

        r = requests.get(url, headers=headers)
        csv = pd.read_csv(io.StringIO(r.text), index_col=0, parse_dates=True)

        return csv


# current date
end = date.today() 

# change the date format
today = end.strftime("%Y-%m-%d") 

# Fetch data from Yahoo Finance and convert it into data frame
# sys.argc[2] contains the ticker from user input
df = YahooData.fetch(sys.argv[2], start="2022-2-1",end=today)  

# give index to the data frame
df = df.reset_index()

# select Date and Price column from the dataset
data = df[["Date","Close"]] 

#renaming the selected columns of the dataset
data = data.rename(columns = {"Date":"ds","Close":"y"})

# fit the dataset 
m = Prophet(daily_seasonality = True) # using prophet library
m.fit(data)

# sys.argv[1] the number of days in future
period = int(sys.argv[1])

# predict the result
future = m.make_future_dataframe(periods=period) 
prediction = m.predict(future)

df = prediction

# get the predicted result
print(df['trend'].iloc[-1])
