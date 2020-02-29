import React, { useState, useEffect } from "react";
import { makeStyles } from '@material-ui/core/styles';
import Box from '@material-ui/core/Box';
import Title from "@layouts/title";
import timelineData from './data';
import TimelineItem from './TimelineItem.js';
import { Link } from 'react-scroll';
import './style.css';
import Button from '@material-ui/core/Button';

const useStyles = makeStyles(theme => ({
	
}));

function EditRespond(){
	const classes = useStyles();

	useEffect(() => {
       
    }, []);

	return (
		<Box>
			<Title content="Академический календарь" />
			<Button variant="contained" color="primary" className="current-date"><Link activeClass="active" className="test" to="test" spy={true} smooth={true} duration={500}>Показать текущую дату</Link></Button>
			<div className="timeline-container">
				{timelineData.map((data, index) => (
					<TimelineItem data={data} key={index}/>
				))}
			</div>
		</Box>
	);
}

export default EditRespond;