import React, { useState, useEffect } from "react";

import { makeStyles } from '@material-ui/core/styles';
import Box from '@material-ui/core/Box';
import Paper from '@material-ui/core/Paper';
import Typography from '@material-ui/core/Typography';
import TextField from '@material-ui/core/TextField';

import InputAdornment from '@material-ui/core/InputAdornment';
import IconButton from '@material-ui/core/IconButton';
import Button from '@material-ui/core/Button';
import Visibility from '@material-ui/icons/Visibility';
import VisibilityOff from '@material-ui/icons/VisibilityOff';

const useStyles = makeStyles(theme => ({
	bg: {
        minHeight: '100vh',
    },
    textField: {
        width: '100%'
    }
}));

function SignIn(){
	const classes = useStyles();
    const [login, setLogin] = useState("");
	const [password, setPassword] = useState("");
	const [showPassword, setShowPassword] = useState(false);

	useEffect(() => {
       
    }, []);

    const handleChange = event => {
        if(event.target.name === 'login'){setLogin(event.target.value);}
		if(event.target.name === 'password'){setPassword(event.target.value);}
	}
    const handleClickShowPassword = () => {
		setShowPassword(!showPassword);
	}

	return (
        <Box 
            bgcolor="text.primary" 
            className={classes.bg} 
            justifyContent="center"
            alignItems="center"
            display="flex"
        >
			<Box component={Paper} maxWidth={"50%"} width="100%" square display="flex" elevation={3}>
                <Box width={"33%"}>
                    <Box width={"100%"} height="100%" bgcolor="primary.main"></Box>
                </Box>
                <Box width={"64%"} px={4} py={10}>
                    <Typography variant="h5" component="div">
                        IITU Campus
                    </Typography>
                    <Box my={2}>
                        Welcome back! Log in to your account.
                    </Box>
                    <TextField
		        		name="login"
		        		label="Учетная запись"
		        		className={classes.textField}
                        value={login}
		        		onChange={handleChange}
		        		margin="normal"
            			required
		        		variant="filled"
		      		/>
                    <TextField
		        		name="password"
		        		label="Пароль"
		        		className={classes.textField}
		        		value={password}
		        		onChange={handleChange}
		        		margin="normal"
            			required
		        		variant="filled"
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
                    <Box mt={2}>
                        <Button variant="contained" color="secondary" size="large">
                            Войти
                        </Button>
                    </Box>
                    
                </Box>
            </Box>
		</Box>
	);
}

export default SignIn;
