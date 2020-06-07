import React, { useState, useEffect } from "react";

import { MuiPickersUtilsProvider, DatePicker} from '@material-ui/pickers';
import DateFnsUtils from "@date-io/date-fns";
import enLocale from "date-fns/locale/en-US";
import ruLocale from "date-fns/locale/ru";
import kkLocale from "date-fns/locale/ru";

function FormBuilderDate(props) {
	const [value, setValue] = useState(props.value || null);
	
	const handleChange = (date) => {
		setValue(date);
		props.handleChange(props.name, date);
	}

	let builderProps = {};
	builderProps.value = value;
	builderProps.disabled 	  = props.disabled;
	builderProps.fullWidth 	  = true;
	builderProps.label 		  = props.label;
	builderProps.name 		  = props.name;
    builderProps.onChange 	  = handleChange;
    builderProps.inputVariant = 'filled';
    builderProps.value 		  = value;
    builderProps.required 	  = props.required;
    builderProps.animateYearScrolling = true;
    builderProps.format = 'yyyy-MM-dd';
    builderProps.autoOk = true;
    builderProps.clearable = true;


	return (
		<MuiPickersUtilsProvider utils={DateFnsUtils} locale={ruLocale}>
			<DatePicker {...builderProps} />
		</MuiPickersUtilsProvider>
	);
}
export default FormBuilderDate;