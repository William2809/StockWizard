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


end = date.today()  # takes the current date
today = end.strftime("%Y-%m-%d")  # change the format

df = YahooData.fetch(sys.argv[2], start="2022-1-1",end=today)  # convert into data frame

print(df['Close'].iloc[0])