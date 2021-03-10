# Importing the libraries
import numpy as np
import pandas as pd
import matplotlib as plt
import pickle
import sys
import sklearn
from sklearn.model_selection import train_test_split

dataset = pd.read_csv('./Engineering_graduate_salary.csv')

dataset.head()

dataset.columns

X = dataset[['10th %', '12th %', 'CGPA in %', 'Verbal', 'Logical', 'Quant']]

y = dataset[['Salary']]

from sklearn.model_selection import train_test_split
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=0)

from sklearn.linear_model import LinearRegression
regressor = LinearRegression()

regressor.fit(X, y)

from sklearn.model_selection import train_test_split

y_test

y_pred = regressor.predict(X_test)

y_pred.ravel()

y_test.values.ravel()

X_test[:-1].values

#ssc=90.30
#hsc=86.00	
#CGPA=80.40
#Verbal=675
#Logical=620
#Quant=650

def swap(assc,ahsc,aCGPA,aVerbal,aLogical,aQuant):
	ssc = float(assc)
	hsc = float(ahsc)
	CGPA = float(aCGPA)
	Verbal = float(aVerbal)
	Logical = float(aLogical)
	Quant = float(aQuant)


	dataset = pd.read_csv('./Engineering_graduate_salary.csv')

	dataset.head()

	dataset.columns

	X = dataset[['10th %', '12th %', 'CGPA in %', 'Verbal', 'Logical', 'Quant']]

	y = dataset[['Salary']]

	from sklearn.model_selection import train_test_split
	X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=0)

	from sklearn.linear_model import LinearRegression
	regressor = LinearRegression()

	regressor.fit(X, y)

	from sklearn.model_selection import train_test_split

	y_test

	y_pred = regressor.predict(X_test)

	y_pred.ravel()

	y_test.values.ravel()

	X_test[:-1].values
	input_data = [[ssc, hsc, CGPA, Verbal, Logical, Quant]]
	out = regressor.predict(input_data)
	print (out)

if __name__ == '__main__':
	swap(*sys.argv[1:])