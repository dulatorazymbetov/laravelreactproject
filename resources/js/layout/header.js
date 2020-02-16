import React from 'react';
import { makeStyles } from '@material-ui/core/styles';

import Box from '@material-ui/core/Box';
import AppBar from '@material-ui/core/AppBar';
import Toolbar from '@material-ui/core/Toolbar';
import IconButton from '@material-ui/core/IconButton';

import TranslateIcon from '@material-ui/icons/Translate';
import PublicIcon from '@material-ui/icons/Public';

const useStyles = makeStyles(theme => ({
	appBar: {
		left: '240px',
		backgroundColor: 'white',
		boxShadow: 'none',
		borderBottom: '1px solid rgba(230,230,230,.7)'
	}
}));

function Navigation(props){
	const classes = useStyles();
	
	
	return (
		<AppBar position="fixed" className={classes.appBar} color="default">
			<Toolbar>
				<IconButton>
					<TranslateIcon fontSize="small"/>
				</IconButton>
				<IconButton>
					<PublicIcon fontSize="small"/>
				</IconButton>		
			</Toolbar>
		</AppBar>
	);
}
export default Navigation;