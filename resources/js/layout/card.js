import React from 'react';
import { makeStyles } from '@material-ui/core/styles';

import CountUp from 'react-countup';
import Box from '@material-ui/core/Box';
import Paper from "@material-ui/core/Paper";
import Grid from "@material-ui/core/Grid";

const useStyles = makeStyles(theme => ({
	paper: {
		color: 'white'
	}
}));

function CountCard(props){
	const classes = useStyles();
	
	
	return (
		<Box component={Grid} container spacing={3}>
			{props.items[0] && <Box component={Grid} item xs={4}>
				<Box component={Paper} height="100%" className={classes.paper} style={{backgroundColor: '#f44336'}}>
					<Box p={2}>
						<Box style={{fontSize: '42px', fontWeight: 'bold'}}><CountUp end={props.items[0].count} /></Box>
						<Box>{props.items[0].title}</Box>
					</Box>
				</Box>
			</Box>}
			{props.items[1] && <Box component={Grid} item xs={4}>
				<Box component={Paper} height="100%" className={classes.paper} style={{backgroundColor: 'rgb(76, 175, 80)'}}>
					<Box p={2}>
						<Box style={{fontSize: '42px', fontWeight: 'bold'}}><CountUp end={props.items[1].count} /></Box>
						<Box>{props.items[1].title}</Box>
					</Box>
				</Box>
			</Box>}
		</Box>
	);
}
export default CountCard;