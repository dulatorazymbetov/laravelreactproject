import React, { useState } from "react";

import { makeStyles } from '@material-ui/core/styles';
import Box from '@material-ui/core/Box';
import Grid from '@material-ui/core/Grid';
import Button from '@material-ui/core/Button';
import Menu from '@material-ui/core/Menu';
import MenuItem from '@material-ui/core/MenuItem';
import Typography from '@material-ui/core/Typography';
import TextField from '@material-ui/core/TextField';
import IconButton from '@material-ui/core/IconButton';
import InputAdornment from '@material-ui/core/InputAdornment';

import TranslateIcon from '@material-ui/icons/Translate';
import Visibility from '@material-ui/icons/Visibility';
import VisibilityOff from '@material-ui/icons/VisibilityOff';
import EmojiPeopleIcon from '@material-ui/icons/EmojiPeople';

import { useLang } from "@contexts/lang";
import { useAuth } from "@contexts/auth";

const useStyles = makeStyles({
	item: {
		minHeight: '100vh'
	},
	fullWidth: {
		minWidth: '240px',
		width: '100%'
	},
});
function SignIn() {
	const classes = useStyles();
	const [menuAnchor, setMenuAnchor] = useState(null);
	const [isLoading, setIsLoading] = useState(false);

	const [login, setLogin] = useState("amazhenov");
	const [password, setPassword] = useState("amazhenov_iitu");
	const [showPassword, setShowPassword] = useState(false);

    const { setToken } = useAuth();

	const { setW, getW, setL } = useLang();
	setW({
		title: {
			ru: 'Войти в ваш аккаунт',
			en: 'Sign into your account'
		},
		account: {
			ru: 'Ученая запись IITU',
			en: 'IITU account'
		},
		password: {
			ru: 'Пароль',
			en: 'Password'
		},
		send: {
			ru: 'Отправить',
			en: 'Login'
		},
		lang: {
			ru: 'Русский',
			en: 'English',
			kk: 'Казахский'
		}
	});

	const handleLangMenuOpen = event => {setMenuAnchor(event.currentTarget);};
	const handleLangMenuClose = () => {setMenuAnchor(null);};

	const langSelect = (lang) => {setMenuAnchor(null);setL(lang);}
	
	const handleChange = event => {
        if(event.target.name === 'login'){setLogin(event.target.value);}
		if(event.target.name === 'password'){setPassword(event.target.value);}
	}
	const handleClickShowPassword = () => {
		setShowPassword(!showPassword);
	}
	const submitForm = event => {
		event.preventDefault();
		if(login && password && !isLoading){
			setIsLoading(true);
			const data = new FormData(event.target);
			window.axios.post('auth', data)
            .then((response) => {
            	setIsLoading(false);
                setToken(response.data.access_token);
            })
            .catch(function (error){
            	setIsLoading(false);
            	if(error.response){
            		
            	}
            });
		}
	}

	return (
		<Grid container alignItems="center">
			<Box 
				component={Grid}
				item container 
				lg={7} md={12}
				className={classes.item}
				p={4}
				alignItems="center" justify="center"
			>
				<Box textAlign="center" width="100%" maxWidth="350px">
					<Typography variant="h1">IITU CAMPUS</Typography>
					<Box color="text.secondary">{getW('title')}</Box>
					<Box my={5} component="form" onSubmit={submitForm}>
						<TextField
							name="login"
							label={getW('account')}
							className={classes.fullWidth}
							value={login}
							onChange={handleChange}
							margin="normal"
							required
							variant="filled"
						/>
						<TextField
							name="password"
							label={getW('password')}
							className={classes.fullWidth}
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
						<Box mt={4}>
							{!isLoading ? <Button variant="contained" color="secondary" className={classes.fullWidth} size="large" type="submit">
								{getW('send')}
							</Button> : <Button variant="contained" color="secondary" className={classes.fullWidth} size="large" disabled>
								Загрузка...
							</Button>}
						</Box>
					</Box>
					<Button 
						aria-controls="simple-menu" 
						aria-haspopup="true" 
						onClick={handleLangMenuOpen}
						size="small"
						startIcon={<TranslateIcon />}
					>
						{getW('lang')}
					</Button>
					<Menu
						id="lang-menu"
						anchorEl={menuAnchor}
						keepMounted
						open={Boolean(menuAnchor)}
						onClose={handleLangMenuClose}
					>
						<MenuItem onClick={() => {langSelect('ru')}}>Русский</MenuItem>
						<MenuItem onClick={() => {langSelect('en')}}>English</MenuItem>
					</Menu>
				</Box>
			</Box>
			<Box 
				component={Grid}
				item container 
				lg={5} md={12}
				bgcolor="text.primary"
				className={classes.item}
				p={4}
				alignItems="center" justify="center"
			>
				<Box textAlign="center" width="100%" maxWidth="350px">
					<img src="/img/logo.webp" />
					<Box 
						component={Button} 
						variant="contained" 
						className={classes.fullWidth} 
						size="large"
						startIcon={<EmojiPeopleIcon />}
					>
						Приемная комиссия
					</Box>
				</Box>
			</Box>
		</Grid>
	);
}

export default SignIn;
