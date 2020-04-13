import React, { useState, useEffect } from "react";

import moment from "moment";
import "moment/locale/ru";
moment.locale("ru");

import { MuiPickersUtilsProvider, DatePicker} from '@material-ui/pickers';
import MomentUtils from '@date-io/moment';

function MyDatePicker(props){
	return (
		<MuiPickersUtilsProvider utils={MomentUtils}>
			<DatePicker
				value={props.value}
				onChange={props.setValue}
	 			animateYearScrolling
	 			fullWidth
	 			autoOk
	 			clearable
	 			inputVariant="filled"
	 			format="YYYY-MM-DD"
	 			label={props.label}
	 			 InputProps={{name: props.name}}
			/>
		</MuiPickersUtilsProvider>
	);
}
export default MyDatePicker;