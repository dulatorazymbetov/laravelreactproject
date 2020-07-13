import React, { useState, useEffect } from "react";
import { makeStyles } from '@material-ui/core/styles';
import Box from '@material-ui/core/Box';
import Title from "@layouts/title";
import TableBuilder from '@layouts/table';
import { useParams } from "react-router-dom";

import VisibilityIcon from '@material-ui/icons/Visibility';

function DiplomaSupplementMain(){
	return (
		<Box>
			<Title content="Приложение к диплому" />
			<Box mt={3}>
				<TableBuilder 
					url="diploma_supplement"
					rows={[
						{
							label: 'Ф.И.О',
							value: row => row['last_name_ru'] + " " + row['first_name_ru'] + " " + row['middle_name_ru']
						},
						{
							label: 'Обр. программа',
							value: 'education_program_ru'
						},
						{
							label: 'Подробнее',
							type: 'link',
							action: {
								icon: 'person',
								variant: 'outlined',
								param: 'id',
								url_prefix: 'diploma_supplement',
								label: 'Подробнее'
							}
						}
					]}
				/>
			</Box>
		</Box>
	);
}

export default DiplomaSupplementMain;