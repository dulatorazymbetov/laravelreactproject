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
	const [isLoading, setIsLoading] = useState(true);
	const [fields, setFields] = useState({});

	useEffect(() => {
       	getData();
    }, []);

    const getData = () => {
    	window.axios.get('edu_programs/'+props.id)
    		.then((response) => {
    			setData(response.data);
    			setIsLoading(false);
    		});
    }
    if(isLoading){return (<div />);}

	return (
		<Box>
			<Title 
				content={data['title_'+getL] || 'Загрузка...'} 
				tree={[
					{link: '/edu_programs', name: 'Образовательные программы'}, 
					{name: data['title_'+getL] || 'Загрузка...'}
				]}
			/>
			<FormBuilder 
				fields={[
					{
						name: 'reg_num',
						label: 'Шифр, регистрационный номер',
						value: data.reg_num
					},
					{
						name: 'title_kk',
						label: 'Название на казахском языке',
						value: data.title_kk
					},
					{
						name: 'title_ru',
						label: 'Название на русском языке',
						value: data.title_ru
					},
					{
						name: 'title_en',
						label: 'Название на английском языке',
						value: data.title_en
					},
				]} 
			/>
		</Box>
	);
}
export default EduProgramsItem;