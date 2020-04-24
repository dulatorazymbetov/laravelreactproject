import React, { useState, useEffect } from "react";

import { makeStyles } from '@material-ui/core/styles';
import Box from '@material-ui/core/Box';

import Title from "@layouts/title";
import { useLang } from "@contexts/lang";
import FormBuilder from "@layouts/form";

const useStyles = makeStyles(theme => ({
	
}));

function EduProgramsItem(props){
	const { getL } = useLang();
	
	const [data, setData] = useState({});
	const [fields, setFields] = useState({});

	useEffect(() => {
       	getData();
    }, []);

    const getData = () => {
    	window.axios.get('edu_programs/'+props.id)
    		.then((response) => {
    			setData(response.data);
    			setFields({

    			});
    		});
    }
    console.log(data);
	return (
		<Box>
			<Title 
				content={data['title_'+getL] || 'Загрузка...'} 
				tree={[
					{link: '/edu_programs', name: 'Образовательные программы'}, 
					{name: data['title_'+getL] || 'Загрузка...'}
				]}
			/>
				
		</Box>
	);
}
export default EduProgramsItem;