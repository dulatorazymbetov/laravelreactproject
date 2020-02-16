import React from 'react';
import { Link } from "react-router-dom";

import { makeStyles } from '@material-ui/core/styles';

import Box from '@material-ui/core/Box';
import Toolbar from '@material-ui/core/Toolbar';
import Button from '@material-ui/core/Button';
import IconButton from '@material-ui/core/IconButton';

import ExpandMoreIcon from '@material-ui/icons/ExpandMore';
import ScatterPlotIcon from '@material-ui/icons/ScatterPlot';

import InboxIcon from '@material-ui/icons/Inbox';
import DateRangeIcon from '@material-ui/icons/DateRange';
import AssignmentIndIcon from '@material-ui/icons/AssignmentInd';
import RecentActorsIcon from '@material-ui/icons/RecentActors';

import { useAuth } from "@contexts/auth";

const useStyles = makeStyles(theme => ({
	root: {
		minHeight: '100vh',
		background: '#2b303b',
		width: '240px'
	},
	top: {
		background: '#272b35',
		borderBottom: '1px solid #232730',
		color: 'white',
		justifyContent: 'space-between',
		textAlign: 'center'
	},
	logo: {
		color: 'white',
		fontSize: '18px',
		fontWeight: '900',
		'&:hover': {
			backgroundColor: 'inherit'
		}
	},
	icon: {
		color: '#929aac',
	},
	item: {
		color: '#929aac',
		display: 'flex',
		justifyContent: 'space-between',
		alignItems: 'center',
		fontSize: '14px',
		fontWeight: '500',
		textDecoration: 'none',
		'&:hover': {
			color: 'white'
		}
	}
}));

function Navigation(props){
	const classes = useStyles();
	const auth = useAuth();
	const logOut = () => {
		auth.setToken(null);
		auth.setUserInfo(null);
	}
	return (
		<div className={classes.root}>
			<Toolbar className={classes.top}>
				<Button 
					component={Link} 
					to="/" 
					className={classes.logo} 
					startIcon={<ScatterPlotIcon />}
					disableRipple
				>
					IITU CAMPUS
				</Button>
				<IconButton className={classes.icon} size="small">
          			<ExpandMoreIcon fontSize="small" />
        		</IconButton>
			</Toolbar>
			<Box p={3}>
				<Box className={classes.item} component={Link} to="/" mb={3}>
					<Box>Главная страница</Box><InboxIcon />
				</Box>
				<Box className={classes.item} component={Link} to="/" mb={3}>
					<Box>Академ. календарь</Box><DateRangeIcon />
				</Box>
				<Box className={classes.item} component={Link} to="/" mb={3}>
					<Box>Отдел кадров</Box><AssignmentIndIcon />
				</Box>
				<Box className={classes.item} component={Link} to="/" mb={3}>
					<Box>Офис регистратор</Box><RecentActorsIcon />
				</Box>
				<Box className={classes.item} component={Link} to="#" mb={3} onClick={logOut}>
					<Box>Выйти</Box>
				</Box>
			</Box>
			
		</div>
	);
}
export default Navigation;