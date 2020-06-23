import React, { useState, useEffect } from "react";

import TextField from '@material-ui/core/TextField';

function FormBuilderFloat(props){
	const [value, setValue] = useState(props.value || '');

	const handleChange = (event) => {
		let newValue = event.target.value;
		if(newValue){
			newValue = newValue.replace(/[^-.0-9]/gim, '') || value;
		}
		if(props.min){
			if(newValue < props.min){
				newValue = props.min;
			}
		}
		if(props.max){
			if(newValue > props.max){
				newValue = props.max;
			}
		}
		setValue(newValue);
		props.handleChange(props.name, newValue);
	}

	let builderProps = {};
	builderProps.disabled 	  = props.disabled;
	builderProps.fullWidth 	  = true;
	builderProps.label 		  = props.label;
	builderProps.name 		  = props.name;
    builderProps.onChange 	  = handleChange;
    builderProps.variant 	  = 'filled';
    builderProps.value 		  = value;
    builderProps.helperText   = props.helper;
    builderProps.required 	  = props.required;
    builderProps.autoComplete = props.autoComplete;

	return (
		<TextField {...builderProps} />
	);
}

export default FormBuilderFloat;