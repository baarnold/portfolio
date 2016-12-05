package edu.greenriver.it.orderfactory;

import edu.greenriver.it.rate.AfricaShippingRate;
import edu.greenriver.it.rate.EUShippingRate;
import edu.greenriver.it.ratefactory.IShippingRate;
import edu.greenriver.it.tax.AfricaSalesTax;
import edu.greenriver.it.tax.EUSalesTax;
import edu.greenriver.it.taxfactory.ISalesTax;

public class AfricaOrderFactory implements IOrderFactory {

		private String region;

		/**
		 * @param region - String nation abbr.
		 */
		public void setRegion(String region) {

			this.region = region;
		}

		@Override
		public ISalesTax getTaxObject() {

			AfricaSalesTax taxObject = new AfricaSalesTax(region);
			return taxObject;
		}

		@Override
		public IShippingRate getRateObject() {

			AfricaShippingRate rateObject = new AfricaShippingRate();
			return rateObject;
		}

	}
