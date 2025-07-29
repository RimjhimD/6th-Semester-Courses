from gpio import *
from time import *
from math import ceil


def handleSensorData(pin):
	value = str(int(ceil(255.0 * analogRead(A1)/1023.0)))
	customWrite(1,str(value))

def readandDisplayPotentiometer():
	value = str(int(ceil(255.0 * analogRead(A0)/1023.0)))
	customWrite(1,str(value))

def main():
	add_event_detect(A1,handleSensorData)
	add_event_detect(A0,readandDisplayPotentiometer)
	pinMode(2, OUT)
	print("Blinking")
	
	while True:
		delay(1000)
		digitalWrite(2, HIGH);
		sleep(2)
		digitalWrite(2, LOW);
		sleep(0.5)

if __name__ == "__main__":
	main()
