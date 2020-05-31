import React, {useState} from 'react';
import { Link } from "react-router-dom";

import { makeStyles } from '@material-ui/core/styles';

import Box from '@material-ui/core/Box';
import Toolbar from '@material-ui/core/Toolbar';
import Button from '@material-ui/core/Button';
import IconButton from '@material-ui/core/IconButton';
import Drawer from '@material-ui/core/Drawer';
import Hidden from '@material-ui/core/Hidden';

import ExpandMoreIcon from '@material-ui/icons/ExpandMore';
import ScatterPlotIcon from '@material-ui/icons/ScatterPlot';
import Icon from '@material-ui/core/Icon';

import { useAuth } from "@contexts/auth";
import { useLang } from "@contexts/lang";

const useStyles = makeStyles(theme => ({
	root: {
		[theme.breakpoints.up('sm')]: {
			width: '240px',
			flexShrink: 0,
			
		  },
	},
	drawerPaper: {
		background: '#2b303b',
		width: '240px',
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
function ListItem(props){
	return (
		<Box className={props.className} component={Link} to={'/'+props.url} mb={3}>
			<Box>{props.content}</Box><Icon>{props.icon}</Icon>
		</Box>
	);
}
function Navigation(props){
	const { container } = props;
	const classes = useStyles();
	const auth = useAuth();
	const modules = auth.userInfo.modules;
	const [mobileOpen, setMobileOpen] = useState(false);

	const { setW, getW, setL, getL } = useLang();

	const logOut = () => {
		auth.setToken(null);
		auth.setUserInfo(null);
		document.title = "IITU CAMPUS";
	}

	const handleDrawerToggle = () => {
		setMobileOpen(!mobileOpen);
	};

	const drawer = (
		<div>
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
				{modules.map((list, index) => {
					if(!list.without_params){
						return (
							<ListItem 
								className={classes.item} 
								content={list["description_"+getL]}
								icon={list.icon}
								url={list.url}
								key={index}
							/>
						);	
					}
				})}
				<Box className={classes.item}  component={Link} to="/" onClick={logOut}>
					<Box>Выйти</Box>
				</Box>
			</Box>
		</div>
	);
	return (
		<div className={classes.root}>
			<Hidden smUp implementation="css">
				<Drawer
					variant="temporary"
					anchor='left'
					container={container}
					open={mobileOpen}
					onClose={handleDrawerToggle}
					classes={{
						paper: classes.drawerPaper,
					}}
					ModalProps={{
						keepMounted: true, // Better open performance on mobile.
					}}
				>
					{drawer}
				</Drawer>
		 	</Hidden>
			 <Hidden xsDown implementation="css">
				<Drawer
					classes={{
						paper: classes.drawerPaper,
					}}
					variant="permanent"
					open
				>
					{drawer}
				</Drawer>
			</Hidden>
		</div>
	);
}
export default Navigation;