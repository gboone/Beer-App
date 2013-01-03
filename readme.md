# About This App

This app is a simple calculator that takes three inputs: 1) alcohol content by volume, 2) serving size, and 3) cost to return what I'm calling a "beer value" number. The idea behind it is not necessarily to judge a beer only by how much alcohol is in it, but a useful tool to help with the paradox of choice on a large tap list. It was hatched after perusing the long tap list at Smoke and Barrel with Andre. Places like this have two dozen beers on tap, all crafts not typically available many other places in town.

The problem was that no matter what we'd order, we'd get something good and something we weren't likely to see again. We didn't have a ton of money to drop on the high priced beers, so cost was a factor so the deciding factor for what to order usually came down to a basic dollar per ounce ratio: a $6 beer is a good value if it's a full pint ($0.375/oz), but not quite as good if it's a 10oz goblet ($0.6/oz). Then we realized that a third factor, alcoholic content, was important in the decision. ABV changes the way beers taste, but also (to be completely transparent), we wanted to know how cheaply we could drink. Once we took that into account, the $6 ten ounce pour looked pretty good when it was approaching the 10% mark and the full pint less interesting at 4.5%. Thus was conceived the beer value number.

As for the programming: all the computation is done in PHP, user interface is built atop Twitter Bootstrap. Some common values are added as buttons on the interface, but a custom value can always be added in the text box inputs at the bottom of each group.

## Definition of the Beer Value Unit
The beer value number first calculates the amount, in ounces, of alcohol in the glass, can, bottle, growler, what have you, by taking the ABV expressed as a number (i.e., 5.4 not 5.4% or .054), dividing by 100 and then multiplying by your beverage's volume (in ounces). It then takes that number and divides by the price (in USD). The result is an ounce-dollar price for the alcohol in that beer. This is typically a very small number, and is multiplied by 100 to return a rational number greater than 1.

Ounces of alcohol = (ABV/100)*Size
We then divide the ounces of alcohol into the price of the beverage. This typically returns a decimal or very small number > 1 equal to the cost per ounce of alcohol.

Ounces of alcohol per dollar = Ounces of Alcohol / Price
Since this is a pretty small number and typically < 1 we multiply that number by 100 to get the beer value number.

Beer Value number = Cost per ounce of alcohol*100
Bringing it all together with the $6 pint supra:

ABV = 4.5%; Size = 16 oz; Price = $6
			
			4.5 / 100 = 0.045 percent as decimal
			
			0.045 x 16oz = 0.72 ounces are alcohol
			
			0.72 oz / $6 = 0.12 ounces per dollar
			
			0.12 ounce-dollars x 100 = Beer Value: 12
		
Compared with the 10oz pour:

ABV = 4.5%; Size = 16 oz; Price = $6
			
			10 / 100 = 0.10 percent as decimal
			
			0.1 x 10oz = 1 ounces are alcohol
			
			1 oz / $6 = 0.18 ounces per dollar
			
			0.18 ounce-dollars x 100 = Beer Value: 16.6667
		
## A Few Examples from the wild

* Surly Furious (MN) at $5.5 on draft at the Triple Rock Social Club (12/22): 14.18
* Schell's 2012 Snowstorm (Biére de Noél, MN) at $4 on bottle at the Triple Rock Social Club (12/22): 22.5
* Brewdog Tactical Nuclear Penguin (UK, Currency equiv. $56.56): 6.31
* Brewdog Sink the Bismark! (UK/DE, currency equiv. $64.64): 8.04
Summit EPA (MN) at $5 on draft at the Triple Rock Social Club (12/22): 12.48