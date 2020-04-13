import React, { useState, useEffect } from "react";

import ruLocale from "date-fns/locale/ru";
import DateFnsUtils from "@date-io/date-fns";
import enLocale from "date-fns/locale/en-US";

import { MuiPickersUtilsProvider, DatePicker} from '@material-ui/pickers';

function MyDatePicker(props){
	return (
		<MuiPickersUtilsProvider utils={DateFnsUtils} locale={ruLocale}>
			<DatePicker
				value={props.value}
				onChange={props.setValue}
	 			animateYearScrolling
	 			fullWidth
	 			autoOk
	 			clearable
	 			inputVariant="filled"
	 			format="yyyy-MM-dd"
	 			label={props.label}
	 			InputProps={{name: props.name}}
			/>
		</MuiPickersUtilsProvider>
	);
}
export default MyDatePicker;