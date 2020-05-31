import React, { useState } from "react";

import { Link } from "react-router-dom";

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
import LockOpenIcon from '@material-ui/icons/LockOpen';

import { useLang } from "@contexts/lang";
import { useAuth } from "@contexts/auth";

const useStyles = makeStyles({
	item: {
		height: '126vh'
	},
	fullWidth: {
		minWidth: '240px',
		width: '100%'
	},
});
function AplicantSignIn() {
	const classes = useStyles();
	const [menuAnchor, setMenuAnchor] = useState(null);
	const [isLoading, setIsLoading] = useState(false);
	const [firstname, setFirstname] = useState("");
	const [lastname, setLastname] = useState("");
	const [patronymic, setPatronymic] = useState("");
	const [email, setEmail] = useState("");
	const [phone, setPhone] = useState("");
	const [iin, setIin] = useState("");
    const [password, setPassword] = useState("");
	const [showPassword, setShowPassword] = useState(false);

    const { setToken } = useAuth();

	const { setW, getW, setL } = useLang();
	setW({
		title: {
			ru: 'Приемная комиссия',
			en: 'Entrance committe'
		},
		account: {
			ru: 'Ученая запись',
			en: 'Username'
		},
		password: {
			ru: 'Пароль',
			en: 'Password'
		},
		send: {
			ru: 'Зарегистрироваться',
			en: 'Register'
		},
		lang: {
			ru: 'Русский',
			en: 'English',
			kk: 'Казахский'
		},
		or: {
			ru: 'или',
			en: 'or'
		},
		sign_in: {
			ru: 'Войти',
			en: 'Sign In'
		}
	});

	const handleLangMenuOpen = event => {setMenuAnchor(event.currentTarget);};
	const handleLangMenuClose = () => {setMenuAnchor(null);};

	const langSelect = (lang) => {setMenuAnchor(null);setL(lang);}
	
	const handleChange = event => {
        if(event.target.name === 'iin'){setIin(event.target.value);}
        if(event.target.name === 'email'){setEmail(event.target.value);}
     	if(event.target.name === 'phone'){setPhone(event.target.value);}
        if(event.target.name === 'firstname'){setFirstname(event.target.value);}
        if(event.target.name === 'lastname'){setLastname(event.target.value);}
        if(event.target.name === 'patronymic'){setPatronymic(event.target.value);}
		if(event.target.name === 'password'){setPassword(event.target.value);}
	}
	const handleClickShowPassword = () => {
		setShowPassword(!showPassword);
	}
	const submitForm = event => {
		event.preventDefault();
		if(email && password && iin && phone && firstname && lastname && patronymic && !isLoading){
			setIsLoading(true);
			const data = new FormData(event.target);
			window.axios.post('register', data)
            .then((response) => {
				setIsLoading(false);
				/*setToken(response.data.token.access_token);
				setUserInfo(response.data.user);*/
            })
            .catch(function (error) {
    			console.log(error.response);
    			setIsLoading(false);
    			if(error.response.data === "invalid login or password"){
    				setErrorMessage('invalid_login_or_password');
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
				p={4}
				alignItems="center" justify="center"
			>
				<Box mt={1} textAlign="center" width="100%" maxWidth="375px">
					<Typography variant="h1">IITU CAMPUS</Typography>
					<Box color="text.secondary">{getW('title')}</Box>
					<Box mt={1} mb={4} component="form" onSubmit={submitForm}>
						<TextField
							name="iin"
							label="ИИН"
							className={classes.fullWidth}
							value={iin}
							onChange={handleChange}
							margin="normal"
							required
							variant="filled"
						/>
						<TextField
							name="email"
							label="E-mail"
							className={classes.fullWidth}
							value={email}
							onChange={handleChange}
							margin="normal"
							required
							variant="filled"
						/>
						<TextField
							name="phone"
							label="Телефон"
							className={classes.fullWidth}
							value={phone}
							onChange={handleChange}
							margin="normal"
							required
							variant="filled"
						/>
						<TextField
							name="lastname"
							label="Фамилия на кириллице"
							className={classes.fullWidth}
							value={lastname}
							onChange={handleChange}
							margin="normal"
							required
							variant="filled"
						/>
						<TextField
							name="firstname"
							label="Имя на кириллице"
							className={classes.fullWidth}
							value={firstname}
							onChange={handleChange}
							margin="normal"
							required
							variant="filled"
						/>
						<TextField
							name="patronymic"
							label="Отчество на кириллице"
							className={classes.fullWidth}
							value={patronymic}
							onChange={handleChange}
							margin="normal"
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
						
						<Box mt={2} mb={4}>
							{!isLoading ? <Button variant="contained" color="secondary" className={classes.fullWidth} size="large" type="submit">
								{getW('send')}
							</Button> : <Button variant="contained" color="secondary" className={classes.fullWidth} size="large" disabled>
								Загрузка...
							</Button>}
						</Box>
						{getW('or')}
						<Box mt={4}>
							<Button variant="contained" className={classes.fullWidth} size="large" component={Link} to="/applicant">
								{getW('sign_in')}
							</Button>
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
				p={4}
				justify="center"
				className={classes.item}
			>
				<Box mt={30} textAlign="center" width="100%" maxWidth="350px">
					<img src="/img/logo.webp"/>
					<Button 
                        component={Link}
                        to="/"
						variant="contained" 
						className={classes.fullWidth} 
						size="large"
						startIcon={<LockOpenIcon />}
					>
						Авторизация
					</Button>
				</Box>
			</Box>
		</Grid>
	);
}

export default AplicantSignIn;
