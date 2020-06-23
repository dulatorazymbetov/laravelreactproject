import React, { useState, useEffect } from "react";

import { makeStyles } from '@material-ui/core/styles';
import Box from '@material-ui/core/Box';

import Title from "@layouts/title";
import FormBuilder from "@layouts/form";
import TableBuilder from "@layouts/table";

const useStyles = makeStyles(theme => ({
	
}));

function ListOfApplicants(){
	const classes = useStyles();

	useEffect(() => {
       
    }, []);

	return (
		<Box>
			<Title content="Абитуриенты" />
			<Box mt={4}>
				<TableBuilder 
					url="list_of_applicants"
					filter={{
						searchText: 'Поиск по ФИО / ИИН / Телефону',
						rows: [
							{
								name: 'apply_year',
								label: 'Учебный год',
								defaultValue: '2020',
								emptyValue: 'Все года'
							}
						]
					}}
					rows={[
						{
							label: 'Ф.И.О',
							value: row => row.user.lastname + " " + row.user.firstname + " " + (row.user.patronymic || '')
						},
						{
							label: 'ИИН',
							value: row => row.user.iin
						},
						{
							label: 'Год поступления',
							value: 'apply_year',
						},
						{
							label: 'Телефон',
							value: row => row.user.tel,
						},
						{
							label: 'Подробнее',
							type: 'link',
							action: {
								icon: 'person',
								variant: 'outlined',
								param: 'user_id',
								url_prefix: 'list_of_applicants',
								label: 'Подробнее'
							}
						}
					]}
				/>
			</Box>
		</Box>
	);
}

export default ListOfApplicants;