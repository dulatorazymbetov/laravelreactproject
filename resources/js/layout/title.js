import React from 'react';
import { makeStyles } from '@material-ui/core/styles';
import Typography from '@material-ui/core/Typography';
import { Link } from 'react-router-dom';


const useStyles = makeStyles(theme => ({
	title: {
		[theme.breakpoints.up('md')]: {
            fontSize: '40px'
        },
	},
	top: {
		fontSize: '14px',
		color: '#555'
	},
	link: {
		color: '#777',
		textDecoration: 'none',
		'&:hover': {
			textDecoration: 'underline'
		}
	},
}));

function Title(props){
	const classes = useStyles();
	
	let content = props.content;
	let tree = props.tree;

	let subtitle = " / " + content;
	if(typeof tree === 'string'){
		subtitle = " / " + tree;
	}
	else if(typeof tree === 'object'){
		subtitle = tree.map((value, index) => {
            if(value.link){
            	return (<span key={index}> / <Link to={value.link} className={classes.link}>{value.name}</Link></span>);
            }
            else {
            	return (<span key={index}> / {value.name}</span>);
            }
        });
	}
	document.title = content + " - IITU CAMPUS";
	return (
		<div className={classes.root}>
			<div className={classes.top}><Link to="/" className={classes.link}>IITU CAMPUS</Link> {subtitle}</div>
			<Typography variant="h1" className={classes.title}>{props.content}</Typography>
		</div>
	);
}
export default Title;