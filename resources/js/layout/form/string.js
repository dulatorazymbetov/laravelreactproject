import React, { useState, useEffect } from "react";

import TextField from '@material-ui/core/TextField';
import InputMask from "react-input-mask";

function TextMaskCustom(props){
	const { inputRef, mask,...other } = props;
	return (
		<InputMask
			mask={mask}
			{...other}
			ref={(ref) => {
        		inputRef(ref ? ref.inputElement : null);
      		}}
		/>
	);
}

function FormBuilderString(props){
	const [value, setValue] = useState(props.value || '');

	const handleChange = (event) => {
		setValue(event.target.value);
		props.handleChange(props.name, event.target.value);
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
    builderProps.mask = props.mask;
    if(props.mask){
    	if(props.mask === 'email'){
    		builderProps.type = 'email';
    	}
    	else {
    		builderProps.InputProps = {
    			inputComponent: TextMaskCustom,
    			inputProps: {mask: props.mask}
    		};	
    	}
    }
    if(props.multiline){
    	builderProps.multiline = true;
    	builderProps.rows = props.multiline;
    }

	return (
		<div><TextField {...builderProps} /></div>
	);
}

export default FormBuilderString;