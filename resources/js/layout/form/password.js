import React, { useState, useEffect } from "react";

import TextField from '@material-ui/core/TextField';
import IconButton from '@material-ui/core/IconButton';
import InputAdornment from '@material-ui/core/InputAdornment';

import Visibility from '@material-ui/icons/Visibility';
import VisibilityOff from '@material-ui/icons/VisibilityOff';

function FormBuilderPassword(props){
	const [value, setValue] = useState(props.value || '');
	const [showPassword, setShowPassword] = useState(false);

	const handleChange = (event) => {
		setValue(event.target.value);
		props.handleChange(props.name, event.target.value);
	}
	const handleClickShowPassword = () => {
		setShowPassword(!showPassword);
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
		<TextField 
			{...builderProps} 
			type={showPassword ? 'text' : 'password'}	
			InputProps={{
				endAdornment: (
					<InputAdornment position="end">
						<IconButton aria-label="Toggle password visibility" onClick={handleClickShowPassword}>
							{showPassword ? <VisibilityOff /> : <Visibility />}
						</IconButton>
					</InputAdornment>
				),
			}}
		/>
	);
}

export default FormBuilderPassword;